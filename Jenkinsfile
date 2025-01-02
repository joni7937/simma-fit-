pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'my-app-image'
        DOCKER_REGISTRY = 'docker.io/joni7937'
    }

    stages {
        stage('Build') {
            steps {
                script {
                    echo 'Building Docker image...'
                    bat 'docker build -t %DOCKER_REGISTRY%/%DOCKER_IMAGE% .'
                }
            }
        }
        
        stage('Deploy') {
            steps {
                script {
                    echo 'Deploying application...'
                    bat 'docker run -d -p 8080:80 %DOCKER_REGISTRY%/%DOCKER_IMAGE%'
                }
            }
        }
    }
}
