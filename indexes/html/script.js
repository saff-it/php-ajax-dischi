const app = new Vue (
    {
        el:'#root',

        data: {
            albums: [],
        },

        methods: {
            getAlbums () {
               axios.get('http://localhost/php-ajax-dischi/indexes/php/api.php')
                .then(result => {
                    this.albums = result.data.results.data;
                    console.log(this.albums);
                }) 
            }
            
        },

        created: function() {
            this.getAlbums();
        }
    }
);