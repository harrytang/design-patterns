import { AbstractHandler } from "./AbstractHandler";

export class CatHandler extends AbstractHandler {
  handler(request: string) {
    if (request === "Mouse") {
      return "Cat: I will catch it!";
    }
    return super.handler(request);
  }
}
