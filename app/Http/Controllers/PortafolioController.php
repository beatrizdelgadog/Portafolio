<?php

namespace App\Http\Controllers;

use App\Services\PortafolioService;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\TypeExperience;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Swift_TransportException;
use TheSeer\Tokenizer\Exception;
class PortafolioController extends Controller
{
    private $portafolioService;
    public function __construct(PortafolioService $portafolioService) {
        $this->portafolioService = $portafolioService;
    }
    /**
     * It gets all the projects from the database and returns them to the view
     * 
     * @return A view with the name of welcome and the variable proyectos.
     */
    public function index()
    {
        $visit_id = visitPage();
        $proyectos = $this->portafolioService->getProyectos();

        $types_experience = TypeExperience::where('status', 'active')->with('experiences')->get();

        return view('portfolio')
            ->with('types_experience', $types_experience)
            ->with('proyectos', $proyectos);
    }

    /**
     * Submit mail
     * @param Request $request
     */
    public function sendEmail(ContactRequest $request)
    {
        try{
            Mail::to(config('app.emails.send'))->queue( new ContactMail($request->input('message'), $request->input('subject'), $request->input('name'), $request->input('email')));
        }catch(Swift_TransportException $e){
            Log::error('No se ha podido enviar el correo', [
                'trace' => $e,
                'message'   => $e->getMessage()
            ]);
            return response()->json([
                'type'      => 'error',
                'message'   => 'No se ha podido enviar el correo',
                'token'     => csrf_token()
            ], 500);
        }catch(Exception $e){
            Log::error('No se ha podido enviar el correo', [
                'trace' => $e,
                'message'   => $e->getMessage()
            ]);
            return response()->json([
                'type'      => 'error',
                'message'   => 'No se ha podido enviar el correo',
                'token'     => csrf_token()
            ], 500);
        }

        return response()->json([
            'type'      => 'success',
            'message'   => 'Correo enviado',
            'token'     => csrf_token()
        ]);
    }
}
