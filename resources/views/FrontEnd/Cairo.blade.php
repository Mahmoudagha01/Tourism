@extends('FrontEnd.Layout.master')
@section('title')
Cairo
@endsection
@section('content')
<div class="citydetails container-md">
      <div class="galary">
        <div>
          <img id="selected" src="imgs/cairo1.jpg" />
          <div id="slide-wrapper">
            <img
              id="slideleft"
              class="arrow"
              src="imgs/Iconleft.png"
              onclick="left()"
            />
            <div id="slider">
              <img class="thumbnail active" src="imgs/cairo1.jpg" />
              <img class="thumbnail" src="imgs/cairo2.jpg" />
              <img class="thumbnail" src="imgs/cairo4.jpg" />
              <img class="thumbnail" src="imgs/cairo5.jpg" />
              <img class="thumbnail" src="imgs/cairo6.jpg" />
              <img class="thumbnail" src="imgs/cairo7.jpg" />
            </div>
            <img
              id="slideRight"
              class="arrow"
              src="imgs/Iconright.png"
              onclick="right()"
            />
          </div>
        </div>
      </div>

      <div class="cairodetails">
        <h2>Cairo</h2>

        <p>
          Despite ranking in the top 30 largest countries with its 1 million
          square kilometers of land, Egypt is a country that is notorious for
          its geographic ‘distribution.’ 99% of Egypt’s population utilizes only
          5% of the total land area but nearly 100% of its aquatic resources as
          a result of the predominantly barren ecosystem. The lifeline of some
          90 million human beings, the river Nile is the focal point of urban
          planning, an incredible 6,695 km gift of sustenance for Egypt and
          three other countries, making it the longest, and arguably most vital,
          river in the world. The Nile enters Egypt a few kilometers north of a
          Sudanese town called Wadi Halfa through a narrow canyon that traverses
          sandstone and granite cliffs. The northward flowing direction of the
          river has thus earned Egypt’s southern border the name “Upper Egypt.”
          <span id="dots"></span><span id="more">
            Within this stretch of the Nile is the world’s most intensive
            concentration of temples, tombs and palaces constructed over the
            span of 4,000 years. This includes the temples of Abydos, Dendara,
            Karnak, Esna, Edfu, Kom Ombo, Philae and Abu Simbel, each conceived
            for their respective deities, further to the tombs in the Theban
            Necropolis within the Valley of the Kings across the river from
            Luxor. Absorbing the river-scape from the comfort of a felucca
            small sail boat is the epitome of pleasure, relished by locals and
            non-locals alike. This is easily arranged in Aswan, and larger Nile
            cruise boats can provide an even more luxurious experience. As this
            river continues to flow upwards past major cities and temples, it
            begins to branch out into a flower-shaped formation known as the
            Nile delta, covering 240 km of the Mediterranean coastline. Home to
            39 million people, this is Egypt’s most agriculturally rich land
            with some of the most beautiful, soul-rejuvenating nature Egypt has
            to offer. Much like the Nile, the Red Sea coast, a once microcosm of
            the world that hosted sailors from far away lands, has also become a
            pivotal part of the country. Turquoise waves break against rocky
            capes and windswept beaches in the foreground of an endless mountain
            range, a much needed escape for the people of Cairo. The real lure
            here, especially for the non-locals, are the fabulous island reefs
            near the resort of Hurghada and the smaller settlements of Port
            Safaga, El-Quseir and Marsa Alam to the south. This entire region
            saw a rapid transformation in the past two decades, catalyzed by
            surges of annual tourists, with the most notable development being
            the future construction of Egypt’s new capital city near this
            coastline. These destinations pack a powerful punch when it comes to
            travel-seeking vacationers. Shark-diving, snorkeling, and
            kite-surfing are complemented by the revitalizing effects of 18-hole
            golf courses, private beaches, open-air cinemas, and unrivaled night
            life scenes. A tribute to its elusive splendor, the Egyptian
            landscape is quite remarkable, especially considering it’s a country
            composed mostly of sand and dust.</span>
            <button onclick="readmore()" id="myBtn" style="border: 0; background: none;border-bottom: 0.5px blue solid;">Read more</button>
          </p>
        </div>
      </div>
    </div>
    <script src="{{asset('js/js/cairo.js')}}"></script>
@endsection