//listening to events
var example1 = new Vue({
    el: '#example-1',
    data: {
      counter: 0
    }
  })
  
  //Method Event Handlers
  var example2 = new Vue({
    el: '#example-2',
    data: {
      name: 'Vue.js'
    },
    // define methods under the `methods` object
    methods: {
      greet: function (event) {
        // `this` inside methods points to the Vue instance
        alert('Hello ' + this.name + '!')
        // `event` is the native DOM event
        if (event) {
          alert(event.target.tagName)
        }
      }
    }
  })
  
  //Methods in Inline Handlers
  new Vue({
    el: '#example-3',
    methods: {
      say: function (message) {
        alert(message)
      },
      warn: function (message, event) {
        // sekarang kita memiliki akses ke event bawaan
        if (event) event.preventDefault()
        alert(message)
      }
    }
  })
  
  //Event Modifiers
  var example4 = new Vue({
    el: '#example-4',
    data: {
      name: 'Vue.js'
    },
    // define methods under the `methods` object
    methods: {
      greet: function (event) {
        // `this` inside methods points to the Vue instance
        alert('Hello ' + this.name + '!')
      }
    }
  })
  
  //Key Modifiers
  var app = new Vue({
    el: '#app',
    methods: {
      pesan: function () {
        alert('Anda menekan tombol Enter')
      }
    }
  })
  
  //System Modifier Keys
  var app1 = new Vue({
    el: '#app1',
    methods: {
      myListener: function () {
        alert('Anda menekan tombol shift + enter!')
      }
    }
  })
  
  //Mouse Button Modifier
  new Vue({
    el: '#editor',
    data: {
      input: ''
    },
    methods: {
      logme: function (msg) {
        this.input += msg + '\n'
      }
    }
  })
  