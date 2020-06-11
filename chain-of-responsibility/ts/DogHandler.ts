import { AbstractHandler } from "./AbstractHandler";

export class DogHandler extends AbstractHandler {
  handler(request) {
    if (request === "MeatBall") {
      return "Dog: I will take it!";
    }
    return super.handler(request);
  }
}
