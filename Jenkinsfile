pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git url: 'https://github.com/joni7937/simma-fit-.git'
            }
        }
        stage('Build Docker Image') {
            steps {
                sh 'docker build -t simma-fit .'
            }
        }
        stage('Test') {
            steps {
                sh 'docker run --rm simma-fit php vendor/bin/phpunit'
            }
        }
        stage('Deploy') {
            steps {
                sh 'docker run -d -p 80:80 simma-fit'
            }
        }
    }
}
