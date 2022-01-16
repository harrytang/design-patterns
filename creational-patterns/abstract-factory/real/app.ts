import EmailTemplateFactory from "./email-template-factory";
import EnEmailTemplateFactory from "./en-email-template-factory";
import ViEmailTemplateFactory from "./vi-email-template-factory";

function clientCode(factory: EmailTemplateFactory) {
  const otpEmailTpl = factory.createOtpEmailTemplate();
  const welcomeEmailTpl = factory.createWelcomeEmailTemplate();

  console.log(otpEmailTpl.toHtml());
  console.log(welcomeEmailTpl.toHtml());
}

/**
* The client code can work with any concrete factory class.
*/
console.log('Client: Testing client code with EnEmailTemplateFactory...');
clientCode(new EnEmailTemplateFactory());
console.log('');


console.log('Client: Testing client code with ViEmailTemplateFactory...');
clientCode(new ViEmailTemplateFactory());
console.log('');