import { IHander } from "./IHander";

export abstract class AbstractHandler implements IHander {
  private nextHandler: IHander;

  setNextHander(hander: IHander): IHander {
    this.nextHandler = hander;
    return hander;
  }
  handler(request: string): string {
    if (this.nextHandler) {
      return this.nextHandler.handler(request);
    }
    return null;
  }
}
