video{
  width: 100%;
}
.navbar{
  background-color:transparent;
    transition: 0.5s;
}

.overviewText {
  width: 60vw;
  margin: 50px;
  margin-top: 6rem;
  margin-bottom: 11rem;
  font-size: 3em;
  font-weight: lighter;
}

.textreview {
  font-size: 2rem;
  margin: 3vmax;
  width: 60%;
  font-weight: 200;
}

.quote {
  color: white;
  font-size: 1vmax;
  font-style: italic;
  margin-bottom: 100px;
}

@media only screen and (max-width: 1177px) {
  .overviewText {
    margin-left: 0%;
    width: 100%;
    font-size: 2.3rem;
  }
  .overviewTextDiv {
    height: 30vmax;
  }
  .textreview {
    width:fit-content;
  }
  .quote {
    font-size: 1rem;
  }
}
@media only screen and (max-width: 575px) {
  .overviewText {
    font-size: 1.7rem;
  }
  .row.mt-4{
      margin-top: 0 !important;
  }
  .textreview {
    font-size: 1.7rem;
  }
}

@media only screen and (max-width: 350px) {
    .overviewText {
      font-size: 1.5rem;
    }
    
    .textreview {
      font-size: 1.3rem;
    }
  }
