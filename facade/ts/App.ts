import { Facade } from "./Facade";

const clientCode = (facade: Facade) => {
  const rs = facade.operation();
  console.log(rs);
};

const facade = new Facade();
clientCode(facade);
