import pl from './translations/pl';

export default function ($translateProvider) {
  'ngInject';
  console.log('translations');
  console.log(pl);
  $translateProvider.translations('pl', pl);
  $translateProvider.preferredLanguage('pl');
}
