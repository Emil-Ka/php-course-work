const q = this;

function a() {
  return this;
}

console.log(a() === global);

console.log(this);