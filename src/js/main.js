import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
  el: '#app',
  data: {
    database: [],
  },
  created() {
    const dbPath = window.location.href + 'partials/scripts/send_json_db.php';
    axios.get(dbPath)
    .then(result => {
        this.database = result.data;
      })
      .catch(e => {
        console.log(e);
      });
  },
});
