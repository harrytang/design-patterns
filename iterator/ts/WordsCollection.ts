import { IAggregator } from "./IAggregator";
import { IIterator } from "./IIterator";
import { AlphabeticalOrderIterator } from "./AlphabeticalOrderIterator";

export class WordsCollection implements IAggregator {
  private items: string[] = [];

  public getItems(): string[] {
    return this.items;
  }

  public getCount(): number {
    return this.items.length;
  }

  public addItem(item: string): void {
    this.items.push(item);
  }

  public getIterator(): IIterator<string> {
    return new AlphabeticalOrderIterator(this, false);
  }

  public getReverseIterator(): IIterator<string> {
    return new AlphabeticalOrderIterator(this, true);
  }
}
