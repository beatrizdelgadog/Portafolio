import React, { useState, useMemo } from "https://cdn.skypack.dev/react";
import ReactDOM from "https://cdn.skypack.dev/react-dom";

function Slide({ slide, previous }) {
  return (
    <div
      className="slide"
      style={{
        "--stats": slide.stats.length
      }}
      data-previous={previous || undefined}
    >
      <div className="slide-name">{slide.name}</div>
      <img className="slide-image" src={slide.image} />
      {slide.quote && <div className="slide-quote">{slide.quote}</div>}
      {slide.stats.map((stat, i) => {
        return (
          <div
            className="slide-stat"
            key={i}
            style={{
              "--i": i
            }}
          >
            <div className="stat-label">{stat.label}</div>
            <div className="stat-value">{stat.value}</div>
          </div>
        );
      })}
    </div>
  );
}

function App() {
  const [slideIndex, setSlideIndex] = useState(0);
  const [prevSlideIndex, setPrevSlideIndex] = useState(null);
  const activeSlide = useMemo(() => slides[slideIndex], [slideIndex]);
  const prevSlide = useMemo(() => slides[prevSlideIndex], [prevSlideIndex]);

  function nextSlide() {
    setPrevSlideIndex(slideIndex);
    setSlideIndex((slideIndex + 1) % slides.length);
  }

  return (
    <div className="app">
      <svg
        viewBox="0 0 100 100"
        className="dashes"
        fill="none"
        stroke="var(--color-purple)"
        stroke-dasharray="2 4 4 3 2 3 8 2 3 5"
      >
        <circle r="45" cx="50" cy="50" />
      </svg>
      <Slide slide={activeSlide} key={slideIndex} />
      {prevSlide && (
        <Slide slide={prevSlide} key={prevSlideIndex + "prev"} previous />
      )}
      <button
        className="button -next"
        onClick={() => {
          nextSlide();
        }}
      >
        Next
        <br />
        Story
      </button>
    </div>
  );
}

ReactDOM.render(<App />, document.querySelector("#root"));
