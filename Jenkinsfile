pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/joni7937/simma-fit-.git'
            }
        }
        stage('Build Docker Image') {
            steps {
                script {
                    dockerImage = docker.build("simma-fit")
                }
            }
        }
        stage('Test') {
            steps {
                sh 'docker run --rm simma-fit npm test'
            }
        }
        stage('Deploy') {
            steps {
                sh 'docker run -d -p 80:80 simma-fit'
            }
        }
    }
}
