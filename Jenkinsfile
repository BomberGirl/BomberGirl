pipeline {
  agent any
  stages {
    stage('Boi') {
      steps {
        echo 'Long'
      }
    }
    stage('textprinting') {
      steps {
        echo 'It works!'
      }
    }
    stage('mailing') {
      steps {
        mail(subject: 'Test', body: 'This is a test', charset: 'utf-8', from: 'jens.scheidmann@gmail.com', to: 'jens.scheidmann@nyp.ch')
      }
    }
  }
}