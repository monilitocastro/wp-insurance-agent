var toggle = {
    start: function() {
      var elems = document.querySelectorAll("[data-from]");
      console.log("Toggle Start: ", elems);
      for (var i = 0, len = elems.length; i < len; i++) {
        console.log("I: ", i);
        var first = elems[i].getAttribute("data-from");
        var second = elems[i].getAttribute("data-to");
        var targetId = elems[i].getAttribute("data-target-id");
        elems[i].setAttribute(
          "onclick",
          'toggle.toggleBetween(event, "' +
            targetId +
            '", "' +
            first +
            '", "' +
            second +
            '");'
        );
        if (second) {
          this.toggleBetween(null, targetId, first, second);
        }
      }
    },
    toggleBetween: function(ev, id, firstClass, secondClass) {
      if (ev && ev.stopPropagation) {
        ev.stopPropagation();
      }
      var elem = document.getElementById(id);
      if (!elem.classList.contains(firstClass)) {
        elem.classList.remove(secondClass);
        elem.classList.add(firstClass);
      } else {
        elem.classList.remove(firstClass);
        elem.classList.add(secondClass);
      }
    }
  };
  
  toggle.start();
  