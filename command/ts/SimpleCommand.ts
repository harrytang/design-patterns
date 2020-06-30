import { ICommand } from "./ICommand";

export class SimpleCommand implements ICommand {
  private payload: string;

  constructor(payload: string) {
    this.payload = payload;
  }

  execute(): void {
    console.log(`I can do simple command such as... ${this.payload}`);
  }
}
