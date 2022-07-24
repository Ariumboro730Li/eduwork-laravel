const { createApp } = Vue;

createApp({
  data() {
    return {
      message: "Hello Vue!",
      status: "tampilkan",
      users: [
        {
          name: "Inka",
          age: 26,
        },
        {
          name: "Fazarillah",
          age: 26,
        },
        {
          name: "eduwork",
          age: 5,
        },
      ],
    };
  },
}).mount("#app");
