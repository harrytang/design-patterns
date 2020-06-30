import { IIterator } from "./IIterator";

export interface IAggregator {
  getIterator(): IIterator<string>;
}
