import IObserver from "./IObserver";

export default interface ISubject {
  attach(observer: IObserver): void;

  dettach(observer: IObserver): void;

  notify(): void;
}
