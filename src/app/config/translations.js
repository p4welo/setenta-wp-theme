import pl from './translations/pl';

export default function ($translateProvider) {
  'ngInject';
  $translateProvider.translations('pl', pl);
  $translateProvider.preferredLanguage('pl');
}
