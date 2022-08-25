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
                    this.albums = result;
                }) 
            }
            
        },

        created: function() {
            this.getAlbums();
        }
    }
);