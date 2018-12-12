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
        stage('error') {
          steps {
            bat(encoding: 'utf-8', script: './gradlew clean build --refresh-dependencies --stacktrace')
          }
        }
      }
    }
  }
}