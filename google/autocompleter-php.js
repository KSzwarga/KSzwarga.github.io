Vue.component('v-autocompleter', {
  template: `  
<div class="autocompleter">
  <input class="google-text-input" :value="value" @input="$emit('input', $event.target.value)" type="search"
      ref="first" @focus="chosen=true" @keyup.down="down()" @keyup.up="up()" @keyup.enter="enter()" />
  <div class="list">
      <ul :class="[value.length !== 0 && chosen && filteredCities.length !== 0 ? '' : 'nothing']">
          <li :class="{current: current === index}" v-for="(city, index) in filteredCities"
              v-on:click="mouseClick(city.name)">
              <div class="city" v-html="notBold(city.name)"></div>
          </li>
      </ul>
  </div>
</div>
    `,
  props: ['value'],

  data: function () {
    return {
      filteredCities: "",
      update_filteredCities: true,
      chosen: true,
      current: -1,
      searchedInput: ''
    }
  },

  watch: {
    /*
     * Funkcja zamienia wartość obecnego wyszukiwania na opcję wybraną za pomocą strzałek
     */
    current: function (newValue) {
      if (newValue < 0) {
        return;
      }
      this.update_filteredCities = false;

      this.$emit('input', this.filteredCities[this.current].name);
    },
    /*
     * Wywołuje liste odfiltrowanych miast
     */
    value: function () {
      this.FilteredCities(this.update_filteredCities);
      this.update_filteredCities = true;
      if (this.current == -1) {
        this.searchedInput = this.value;
      }
    }
  },
  methods: {
    /*
     * Wyszukuje miasto wybrane za pomocą kliknięcia myszki, zamyka autocompleter przy kliknięciu na fraze
     */
    mouseClick: function (a) {
      this.$emit('input', a);
      this.update_filteredCities = true;
      this.current = -1;
      this.$emit('enter', this.value);
      this.chosen = false;
    },

    /*
     * Funkcja zamienia cześć tekstu nie zawartego we wpisanej frazie na tekst niewytłuszczony
     */
    notBold: function (x) {
      result = this.value;
      return x.replaceAll(result, '<span class="notBold">' + result + '</span>')
    },

    /*
     * Wyszukuje miasto wpisane w wyszukiwaniu po wciśnięciu przycisku enter
     */
    enter: function () {
      this.update_filteredCities = true;
      this.chosen = false;
      this.current = -1;
      this.$emit('enter', this.value);
    },

    /*
     * zmienia obecnie wybrane miasto za pomocą strzałki w dól przy ostatnim mieście wraca na początek
     */
    down: function () {
      if (this.current < this.filteredCities.length - 1) {
        this.current++;
      } else if (this.current == this.filteredCities.length - 1) {
        this.current = 0;
      }
    },

    /*
     * zmienia obecnie wybrane miasto za pomocą strzałki w górę przy pierwszym mieście wraca na koniec
     */
    up: function () {
      if (this.current > 0) {
        this.current--;
      } else if (this.current == 0) {
        this.current = this.filteredCities.length - 1;
      }
    },
    /*
     * zwraca listę (max 10) miast zawierających frazę
     */
    FilteredCities: Cowboy.debounce(100, function (bool) {
      if (bool) {
        fetch(`http://localhost:8080/search?name=${this.value}`)
          .then(response => response.json())
          .then(data => {
            if (data.length > 10) {
              this.filteredCities = data.slice(1, 11);
            } else {
              this.filteredCities = data;
            }
            this.current = -1;
          });
      }
    })
  }
})