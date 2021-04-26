
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
            filteredCities() {
                let filteredCities = this.cities.filter(city => city.name.toLowerCase().includes(this.googleSearch));
                return filteredCities.slice(0,10);
            }
        },

        methods: {
            autocomplete(city) {
                this.googleSearch = city.name;
                this.results = this.googleSearch;
            },

            Bold: function(x)
            {
                input = this.googleSearch;
                var temp = x.split(input);
                for(i = 0; i < temp.length; i++)
                {
                    x = x.replace(temp[i], temp[i].bold());
                }
                return x;
            },
        },
  
    });
