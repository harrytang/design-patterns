import Subject from "./Subject";
import ObserverA from "./ObserverA";
import ObserverB from "./ObserverB";

const subject = new Subject();

const obs1 = new ObserverA();
const obs2 = new ObserverB();

subject.attach(obs1);
subject.attach(obs2);

subject.someBusinessLogic();
subject.someBusinessLogic();

subject.dettach(obs1);
subject.someBusinessLogic();
subject.someBusinessLogic();
