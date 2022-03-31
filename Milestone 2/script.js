const appVue = new Vue({
  el: "#app",
  data: {
    card: [],
  },
  created() {
    axios
      .get("http://localhost/Marzo%202022/php-ajax-dischi%2031%20marzo/php-ajax-dischi/Milestone%202/lista_server.php")
      .then((res) => {
        this.card = res.data;
      });
  },
});
