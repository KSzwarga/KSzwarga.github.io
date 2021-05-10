Vue.component('v-autocompleter', {
    template: `       
    
                                    <input v-autocompleter class ="search-searchbar-input" type="search" v-model="googleSearch" @focus="focused = true" @keyup.enter="enter()" @keyup.down="down()" @keyup.up="up()"></input>

                          
    `,
    data: {
            googleSearch: "",
            cities: window.cities,
            fraza: "",
            results: "",
            current: -1,
            update_filteredCities:true,
            focused: false,
            change: false,
        },
    watch: {

            current : function() {
            this.update_filteredCities=false;
            this.googleSearch = this.filteredCities[this.current].name;
            },
            googleSearch: function(){
                this.FilteredCities(this.update_filteredCities);
                this.update_filteredCities=true;
                console.log(this.filteredCities);

                if(this.current==-1){
                    this.searchedInput=this.googleSearch;
                    
                }
            }

    },
    methods: {
        autocomplete(city) {
            this.googleSearch = city.name;
            this.results = this.googleSearch;
        },
        enter() {
            this.update_filteredCities=true;
            this.change= true;
            this.current=-1;
         },
        Bold: function(x)
        {
            
            return x.replaceAll(this.googleSearch, '<span class="light">' + this.googleSearch + '</span>')
              
        },
    
        down: function() {
            if (this.current < this.filteredCities.length)
            {
                this.current++;
            } else if (this.current == this.filteredCities.length)
            {
                this.current = 0;
            }
        },

        up: function() {
            if(this.current > 0)
            {
                this.current--;
            } else if (this.current < 0)
            {
                this.current = this.filteredCities.length - 1;
            }
        },
        currentCity: function() {
            this.googleResults = true;
        },

        FilteredCities(yes){
            if(yes){
               let result=this.cities.filter(city => city.name.includes(this.googleSearch));
               if(result.length>10){
                   this.filteredCities= result.slice(1, 11);
               }
               else{
                   this.filteredCities= result;
               }
               this.current=-1;
            }   
        },
        selected(i){
            this.googleSearch=this.filteredCities[i].name;
            this.enter();
         },
}
})

var app = new Vue({
        el: '#app',
        data: {
            googleSearch: "",
            cities: window.cities,
            fraza: "",
            results: "",
            current: -1,
            update_filteredCities:true,
            focused: false,
            change: false,
        },
        updated() {
            this.$nextTick(() => {

                if (this.change) {
                    this.$refs.top.focus();

                } else {

                    this.$refs.bottom.focus();

                }

        })},
    

        methods: {


             Results(){
                if(this.googleSearch.length==0){
                    this.change=false;
                }
                return this.change;

             }
    }
    });

