import { Creator } from "./Creator";
import { CreatorA } from "./CreatorA";
import { CreatorB } from "./CreatorB";
function clientCode(creator: Creator) {
  console.log(creator.doSomething());
}

clientCode(new CreatorA());
clientCode(new CreatorB());
