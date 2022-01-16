/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import EmailTemplateFactory from './email-template-factory';

import AbstractOtpEmailTemplate from './templates/abstract-otp-email-template';
import AbstractWelcoemEmailTemplate from './templates/abstract-welcome-email-template';

import OtpEmailTemplate from './templates/en/otp-email-template';
import WelcoemEmailTemplate from './templates/en/welcome-email-template';


class EnEmailTemplateFactory implements EmailTemplateFactory {
  createOtpEmailTemplate(): AbstractOtpEmailTemplate {
    return new OtpEmailTemplate('123456');
  }

  createWelcomeEmailTemplate(): AbstractWelcoemEmailTemplate {
    return new WelcoemEmailTemplate('Harry');
  }
}

export default EnEmailTemplateFactory;
