export interface IHander {
  setNextHander(hander: IHander): IHander;
  handler(request: string): string | null;
}
