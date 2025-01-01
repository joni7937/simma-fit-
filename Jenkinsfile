pipeline {
    agent any
    
    environment {
        DOCKER_IMAGE = 'php:8.0-apache'
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build') {
            steps {
                script {
                    echo 'Building the application'
                    sh 'docker build -t simma-fit .'
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    echo 'Running tests'
                    sh 'docker run --rm simma-fit phpunit tests'
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    echo 'Deploying the application'
                    sh 'docker run --rm -d -p 80:80 simma-fit'
                }
            }
        }
    }
}
