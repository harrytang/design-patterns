import { Singleton } from "./Singleton";

const clientCode = () => {
  const s1 = Singleton.getInstance();
  const s2 = Singleton.getInstance();

  if (s1 === s2) {
    console.log("It works");
  } else {
    console.log("It does not work");
  }
};

clientCode();
