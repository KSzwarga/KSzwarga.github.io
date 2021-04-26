
    var app = new Vue({
        el: '#app',
        data: {
            googleSearch: "",
            cities: window.cities,
            fraza: "",
            results: "",
        },
        updated() {
            this.$nextTick(() => {

                if (this.change) {
                    this.$refs.top.focus();

                } else {

                    this.$refs.bottom.focus();

                }

    });

},

        computed: {
            filteredCities: function () {
                let filtered = this.cities.filter(city => city.name.includes(this.googleSearch))
        
                if (filtered.length > 10) {
                    filtered = filtered.slice(0, 10)
                }
                return filtered
              }
            },
        

        methods: {
            autocomplete(city) {
                this.googleSearch = city.name;
                this.results = this.googleSearch;
            },

            Bold: function(x)
            {
                
                return x.replaceAll(this.googleSearch, '<span class="light">' + this.googleSearch + '</span>')
                  
            },
        },
  
    });
