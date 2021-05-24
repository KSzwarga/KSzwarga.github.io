Vue.component('v-autocompleter', {
  template: `                   

  <div>
    <input class="google-text-input" :value="value" @input="$emit('input', $event.target.value)" type="search"
        v-on:click="ustaw()" ref="first" @focus="chosen=true" @keyup.down="down()" @keyup.up="up()"
        @keyup.enter="enter()" />
    <div>
        <ul
            :class="[value.length !== 0 && chosen && filteredCities.length !== 0 ? '' : 'nothing']">
            <li :class="{current: current === index}" v-for="(city, index) in filteredCities"
                v-on:click="mouseClick(city.name)">
                <div class="city" v-html="Bold(city.name)"></div>
            </li>
        </ul>
    </div>
  </div>               
    `,
  props: ['options', 'value'],

  data: function () {
    return {
      cities: window.cities,
      filteredCities: "",
      update_filteredCities: true,
      chosen: false,
      current: -1,
      searchedInput: ''
    }
  },

  watch: {

    current: function (newValue) {
      if (newValue < 0) {
        return;
      }
      this.update_filteredCities = false;

      this.$emit('input', this.filteredCities[this.current].name);
    },

    value: function () {
      this.FilteredCities(this.update_filteredCities);
      this.update_filteredCities = true;
      console.log(this.filteredCities);

      if (this.current == -1) {
        this.searchedInput = this.value;
      }
    }
  },
  methods: {

    mouseClick: function (a) {
      this.$emit('input', a); 
      this.update_filteredCities = true;
      this.chosen = true;
      this.current = -1;
      this.$emit('enter', this.value);
    },

    Bold: function (x) {
      result = this.value;
      return x.replaceAll(result, '<span class="Bold">' + result + '</span>')
    },


    enter: function () {
      this.update_filteredCities = true;
      this.chosen = false;
      this.current = -1;
      this.$emit('enter', this.value);
    },

    down: function () {
      if (this.current < this.filteredCities.length - 1) {
        this.current++;
      } else if (this.current == this.filteredCities.length - 1) {
        this.current = 0;
      }
    },


    up: function () {
      if (this.current > 0) {
        this.current--;
      } else if (this.current == 0) {
        this.current = this.filteredCities.length - 1;
      }
    },

    FilteredCities: function (bool) {
      if (bool) {
        let result = this.cities.filter(city => city.name.includes(this.value));
        if (result.length > 10) {
          this.filteredCities = result.slice(1, 11);
        } else {
          this.filteredCities = result;
        }
        this.current = -1;
      }
    }
  }
});