import IObserver from "./IObserver";
import ISubject from "./ISubject";
import Subject from "./Subject";

export default class ObserverA implements IObserver {
  update(subject: ISubject): void {
    if (subject instanceof Subject && subject.state > 3) {
      console.log("ObserverA: Reacted to the event.\n");
    }
  }
}
