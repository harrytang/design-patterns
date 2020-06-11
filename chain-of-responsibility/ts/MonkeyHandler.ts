import { AbstractHandler } from "./AbstractHandler";

export class MonkeyHandler extends AbstractHandler {
  handler(request: string) {
    if (request === "Banana") {
      return "Monkey: I will take it!";
    }
    return super.handler(request);
  }
}
