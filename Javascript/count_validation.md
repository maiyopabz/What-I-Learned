# Validation Count

I created a quick function to count remain input when inserting input into forms.

I created a class called `count_char`for the function.<br>
I created a class called `text-orange` for the css.

`Example:`

```ts
//input textarea form

<div class="mt-3 form-group col-lg-11 col-11">
  <label>Describe Services Need:</label>
  <textarea
    id="other-services-notes"
    name="services_note"
    class="form-control count_chars"
    maxlength="250"
    data-max-chars="250"
    rows="3"
    placeholder=""
  ></textarea>

  <div class="text-orange"></div>
</div>
```

```ts
//function script

(function () {
  document.addEventListener("keyup", function (event) {
    if (event.target.matches(".count_chars")) {
      // get input value and length
      const value = event.target.value;
      const valueLength = event.target.value.length;

      // get data value
      const maxChars = parseInt(event.target.getAttribute("data-max-chars"));
      const remainingChars = maxChars - valueLength;
      if (valueLength > maxChars) {
        // limit chars to maxChars
        event.target.value = value.substr(0, maxChars);

        return; //end function execution
      }
      event.target.nextElementSibling.innerHTML =
        remainingChars + " characters remaining";
    }
  });
})();
```
