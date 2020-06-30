import { Invoker } from "./Invoker";
import { SimpleCommand } from "./SimpleCommand";
import { ComplexCommand } from "./ComplexCommand";
import { Receiver } from "./Receiver";

const invoker = new Invoker();
invoker.setOnStartCommand(new SimpleCommand("Say hello!"));
invoker.setOnFinishCommand(
  new ComplexCommand(new Receiver(), "Send email", "Log action")
);
invoker.doSomethingImportant();
