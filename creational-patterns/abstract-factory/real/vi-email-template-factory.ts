/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

 import EmailTemplateFactory from './email-template-factory';

 import AbstractOtpEmailTemplate from './templates/abstract-otp-email-template';
 import AbstractWelcoemEmailTemplate from './templates/abstract-welcome-email-template';
 
 import OtpEmailTemplate from './templates/vi/otp-email-template';
 import WelcoemEmailTemplate from './templates/vi/welcome-email-template';
 
 
 class EnEmailTemplateFactory implements EmailTemplateFactory {
  createOtpEmailTemplate(code: string): AbstractOtpEmailTemplate {
    return new OtpEmailTemplate(code);
  }

  createWelcomeEmailTemplate(name: string): AbstractWelcoemEmailTemplate {
    return new WelcoemEmailTemplate(name);
  }
 }
 
 export default EnEmailTemplateFactory;
 