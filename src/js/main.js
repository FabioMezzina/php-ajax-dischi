import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
  el: '#app',
  data: {
    database: [],
    // author list to populate the html select list
    authorList: [],
    // author to filter selected by user
    authorToFilter: 'All',
    // db filter script path
    dbFilterPath: window.location.href + 'partials/scripts/send_json_db.php',
  }, // <- End Data
  created() {
    // First call, the whole db is returned (author = 'All')
    axios.get(this.dbFilterPath, {
      params: {
        author: 'All',
      }
    })
    .then(response => {
        this.database = response.data;
        // create the author list to be displayed in the select
        this.createAuthorList();
      })
      .catch(e => {
        console.log(e);
      });
  }, // <- End Created()
  methods: {
    /**
     * create an array of authors based on the cds database
     */
    createAuthorList() {
      this.database.forEach(cd => {
        if(! this.authorList.includes(cd.author)) {
          this.authorList.push(cd.author);
        }
      });
    },
    /**
     * Ask for a filtered database
     */
    filterAuthor() {
      axios.get(this.dbFilterPath, {
        params: {
          author: this.authorToFilter,
        }
      })
      .then(response => {
        this.database = response.data;
      })
      .catch(e => {
        console.log(e);
      });
    }
  } // <- End Methods
});
