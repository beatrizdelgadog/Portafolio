(function (win, doc) {

    "use strict";
  
    class Action {
      constructor(obj) {
        this.PREFIX = obj.prefix;
        this.LENGTH = obj.length;
        this.MAX_INDEX = this.LENGTH - 1;
        this.index = 0;
        this.timer = null;
        this.isDoingFlag = false;
      }
  
      stop() {
        clearTimeout(this.timer);
        this.index = 0;
        this.isDoingFlag = false;
      }
  
      start() {
        this.stop();
        this.isDoingFlag = true;
      }
  
      next() {
        this.index = ++this.index % this.LENGTH;
      }
  
      getKlassName() {
        return this.PREFIX + this.index;
      }
  
      isDoing() {
        return this.isDoingFlag;
      }}
  
  
    class Runner {
      constructor(id) {
        this.INTERVAL = 60;
        this.actionRun = new Action({
          prefix: "r",
          length: 18 });
  
        this.actionJump = new Action({
          prefix: "j",
          length: 17 });
  
        this.actionSpecial = new Action({
          prefix: "s",
          length: 1 });
  
        this.elm = doc.getElementById(id);
      }
  
      start() {
        this.actionRun.start();
        this.actionRun.timer = setInterval(this.step.bind(this), this.INTERVAL);
      }
  
      jump() {
        if (this.actionRun.isDoing()) {
          this.actionRun.stop();
          this.actionJump.start();
          this.actionJump.timer = setInterval(this.flow.bind(this), this.INTERVAL);
        }
      }
  
      step() {
        this.actionRun.next();
        this.elm.className = this.actionRun.getKlassName();
      }
  
      flow() {
        if (this.actionJump.index < this.actionJump.MAX_INDEX) {
          this.actionJump.next();
          this.elm.className = this.actionJump.getKlassName();
        } else {
          this.actionJump.stop();
          this.start();
        }
      }}
  
  
    main();
  
    function main() {
      var runner = new Runner("stage");
  
      runner.start();
  
      doc.addEventListener("click", function () {
        runner.jump();
      }, false);
    }
  
  })(this, document);