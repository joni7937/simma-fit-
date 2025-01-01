pipeline {
    agent any

    stages {
        stage('Checkout SCM') {
            steps {
                checkout scm
            }
        }
        
        stage('Build') {
            steps {
                echo 'Building the application'
                bash '-c "docker build -t simma-fit ."'
            }
        }
        
        stage('Test') {
            steps {
                echo 'Running tests'
                bash '-c "docker run simma-fit test"'
            }
        }
        
        stage('Deploy') {
            steps {
                echo 'Deploying the application'
                bash '-c "docker-compose up -d"'
            }
        }
    }
}
