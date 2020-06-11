import { IHander } from "./IHander";
import { DogHandler } from "./DogHandler";
import { CatHandler } from "./CatHandler";
import { MonkeyHandler } from "./MonkeyHandler";

const clientCode = (hander: IHander) => {
  const foods = ["Mouse", "Coffee", "Banana"];
  foods.forEach((food) => {
    console.log(`Who wants ${food}?`);
    const result = hander.handler(food);
    if (result) {
      console.log(result);
    } else {
      console.log(`${food} stay untouched`);
    }
  });
};

const dog = new DogHandler();
const cat = new CatHandler();
const monkey = new MonkeyHandler();

monkey.setNextHander(dog).setNextHander(cat);
clientCode(monkey);
