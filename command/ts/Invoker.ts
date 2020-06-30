import { ICommand } from "./ICommand";

export class Invoker {
  private onStartCommand: ICommand;
  private onFinishCommand: ICommand;

  setOnStartCommand(command: ICommand): void {
    this.onStartCommand = command;
  }

  setOnFinishCommand(command: ICommand): void {
    this.onFinishCommand = command;
  }

  doSomethingImportant() {
    if (this.onStartCommand) {
      console.log("Before start...");
      this.onStartCommand.execute();
    }

    console.log("Doing something important...\n");

    if (this.onFinishCommand) {
      console.log("After finish...");
      this.onFinishCommand.execute();
    }
  }
}
