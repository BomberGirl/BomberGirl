pipeline {
  agent any
  stages {
    stage('Boi') {
      steps {
        echo 'Long'
      }
    }
    stage('error') {
      parallel {
        stage('error') {
          steps {
            echo 'It works!'
          }
        }
        stage('') {
          steps {
            bat(encoding: 'utf-8', script: './gradlew gradle clean gradle build')
          }
        }
      }
    }
  }
}