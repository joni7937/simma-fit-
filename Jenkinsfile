pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/joni7937/simma-fit-.git'
            }
        }
        stage('Build Docker Image') {
            steps {
                sh 'docker build -t simma-fit-image .'
            }
        }
        stage('Run Docker Container') {
            steps {
                sh 'docker run -d -p 8080:80 --name simma-fit-container simma-fit-image'
            }
        }
    }
}
