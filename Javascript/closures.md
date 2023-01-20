# Closures

In `JavaScript`, a closure is a function that has access to variables in its parent scope, even after the parent function has returned or exited.

`Closures` are created when a function is defined inside another function, and the inner function retains access to the variables in the outer function's scope even after the outer function has completed execution. This allows the inner function to continue to reference and manipulate the variables from the outer function, even after the outer function has returned.

`Closures` are often used to create private variables and methods, as well as to create function factories and to handle callbacks.cmd

```ts
//notes

function outerFunction(x) {
  return function innerFunction(y) {
    return x + y;
  };
}
let add5 = outerFunction(5);
console.log(add5(3)); // 8
```

In this example, the `innerFunction` is defined inside the `outerFunction`, and it has access to the `x` variable from the `outerFunction's` scope. When the `outerFunction` is called with an argument of `5`, it returns the `innerFunction` with `x` set to `5`. We then assign the returned innerFunction to the variable add5.

When we call `add5(3)`, it will return the sum of `x` and `y`, which is `8` in this case.
