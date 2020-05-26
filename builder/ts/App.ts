import { Director } from "./Director";
import { ConcreteBuilder1 } from "./ConcreteBuilder1";

const clientCode = (director: Director) => {
  const builder = new ConcreteBuilder1();

  director.setBuilder(builder);

  // simple
  director.buildSimpleProduct();
  const p1 = builder.getProduct();
  p1.listParts();

  // full
  director.buildFullProduct();
  const p2 = builder.getProduct();
  p2.listParts();

  // custom
  builder.producePartA();
  builder.producePartC();
  const p3 = builder.getProduct();
  p3.listParts();
};

const director = new Director();
clientCode(director);
