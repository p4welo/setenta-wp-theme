angular.module('services', [])

    .factory('courseFactory', function () {

      var courses = [
        {
          startTime: '17:00',
          endTime: '18:00',
          name: 'Formacja taneczna (do 7 lat)',
          instructor: 'Andżelika Tymiak',
          level: 'BEG',
          day: 'PN'
        },
        {
          startTime: '18:00',
          endTime: '19:00',
          name: 'Formacja taneczna (6-11 lat)',
          instructor: 'Barbara Radomska',
          level: 'ADV',
          day: 'PN'
        },
        {
          startTime: '18:00',
          endTime: '19:00',
          name: 'Latino solo',
          instructor: 'Magdalena Mazij',
          level: 'BEG',
          day: 'PN'
        },
        {
          startTime: '19:00',
          endTime: '20:00',
          name: 'Taniec towarzyski od podstaw',
          instructor: 'Katarzyna Michalak',
          level: 'BEG',
          day: 'PN'
        },
        {
          startTime: '20:00',
          endTime: '21:00',
          name: 'Taniec towarzyski',
          instructor: 'Katarzyna Michalak',
          level: 'INT',
          day: 'PN'
        },
        {
          startTime: '21:00',
          endTime: '22:00',
          name: 'Salsa kubańska',
          instructor: 'Jacek Sztorc',
          level: 'INT',
          day: 'PN'
        },
        {
          startTime: '17:00',
          endTime: '17:45',
          name: 'Balet z elem. gimnastyki artystycznej (4-6 lat)',
          instructor: 'Magda Mróz-Murawska',
          level: 'BEG',
          day: 'WT'
        },
        {
          startTime: '17:45',
          endTime: '18:30',
          name: 'Balet z elem. gimnastyki artystycznej (4-6 lat)',
          instructor: 'Magda Mróz-Murawska',
          level: 'INT',
          day: 'WT'
        },
        {
          startTime: '18:30',
          endTime: '19:30',
          name: 'Wynajem sali',
          day: 'WT'
        },
        {
          startTime: '19:30',
          endTime: '20:30',
          name: 'Taniec użytkowy',
          instructor: 'Magda Mróz-Murawska',
          level: 'BEG',
          day: 'WT'
        },
        {
          startTime: '20:30',
          endTime: '21:30',
          name: 'Taniec użytkowy',
          instructor: 'Magda Mróz-Murawska',
          level: 'INT',
          day: 'WT'
        },
        {
          startTime: '17:00',
          endTime: '18:00',
          name: 'Formacja taneczna (do 7 lat)',
          instructor: 'Andżelika Tymiak',
          level: 'BEG',
          day: 'SR'
        },
        {
          startTime: '18:00',
          endTime: '19:00',
          name: 'Formacja taneczna (6-11 lat)',
          instructor: 'Barbara Radomska',
          level: 'ADV',
          day: 'SR'
        },
        {
          startTime: '19:00',
          endTime: '20:00',
          name: 'Taniec towarzyski',
          instructor: 'Andżelika Tymiak',
          registration: true,
          level: 'BEG',
          day: 'SR'
        },
        {
          startTime: '20:00',
          endTime: '21:00',
          name: 'Taniec użytkowy',
          instructor: 'Magda Mróz-Murawska',
          level: 'ADV',
          day: 'SR'
        },
        {
          startTime: '21:00',
          endTime: '22:00',
          name: 'Taniec użytkowy',
          instructor: 'Magda Mróz-Murawska',
          registration: true,
          level: 'BEG',
          day: 'SR'
        },
        {
          startTime: '17:00',
          endTime: '17:45',
          name: 'Mix dance (4-7 lat)',
          instructor: 'Magdalena Mazij',
          level: 'BEG',
          day: 'CZ'
        },
        {
          startTime: '17:45',
          endTime: '18:30',
          name: 'Balet z elem. gimnastyki artysty3nej (4-7 lat)',
          instructor: 'Magda Mróz-Murawska',
          level: 'BEG',
          day: 'CZ'
        },
        {
          startTime: '18:30',
          endTime: '19:30',
          name: 'Wynajem sali',
          day: 'CZ'
        },
        {
          startTime: '18:30',
          endTime: '19:30',
          name: 'Latino solo',
          instructor: 'Magdalena Mazij',
          level: 'BEG',
          day: 'CZ'
        },
        {
          startTime: '18:30',
          endTime: '19:30',
          name: 'Hip hop (12-18 lat)',
          instructor: 'Hubert Świątkowski',
          level: 'INT',
          day: 'CZ'
        },
        {
          startTime: '19:30',
          endTime: '20:30',
          name: 'Reggaeton',
          instructor: 'Magdalena Mazij',
          level: 'ADV',
          day: 'CZ'
        },
        {
          startTime: '19:30',
          endTime: '20:30',
          name: 'Taniec użytkowy',
          registration: true,
          level: 'BEG',
          day: 'CZ'
        },
        {
          startTime: '20:30',
          endTime: '22:00',
          name: 'Taniec towarzyski',
          instructor: 'Katarzyna Michalak',
          level: 'ADV',
          day: 'CZ'
        },
        {
          startTime: '16:45',
          endTime: '17:50',
          name: 'Taniec nowoczesny (8-14 lat)',
          instructor: 'Andżelika Tymiak',
          level: 'BEG',
          day: 'PT'
        },
        {
          startTime: '17:50',
          endTime: '18:30',
          name: 'Mix dance (4-7 lat)',
          instructor: 'Andżelika Tymiak',
          level: 'BEG',
          day: 'PT'
        },
        {
          startTime: '18:30',
          endTime: '19:30',
          name: 'Taniec użytkowy',
          registration: true,
          level: 'BEG',
          day: 'PT'
        },
        {
          startTime: '20:30',
          endTime: '21:30',
          name: 'Bachata',
          instructor: 'Marcin Pęczkowski',
          level: 'BEG',
          day: 'PT'
        },
        {
          startTime: '19:00',
          endTime: '20:00',
          name: 'Taniec użytkowy',
          registration: true,
          level: 'BEG',
          day: 'SB'
        }
      ];

      return {
        list: list,
        getByDay: getByDay,
        getRegistrationsByStyle: getRegistrationsByStyle
      };

      function list() {
        return courses;
      }

      function getRegistrationsByStyle() {
        return _
            .chain(courses)
            .filter('registration')
            .groupBy('name')
            .value();
      }

      function getByDay() {
        return _.groupBy(courses, 'day');
      }
    });