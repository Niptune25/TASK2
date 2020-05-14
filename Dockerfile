FROM ubuntu
USER root
COPY subtask1.sh .
COPY subtask2.sh .
COPY subtask3a.sh .
COPY subtask3b.sh .
COPY subtask3.sh .
COPY subtask4a.sh .
COPY subtask4b.sh .
COPY subtask4.sh .
COPY bashrcfile.sh .
RUN ./subtask1.sh
RUN ./subtask2.sh
RUN ./subtask3a.sh
RUN ./subtask3b.sh
RUN ./subtask3.sh
RUN ./subtask4a.sh
RUN ./subtask4b.sh
RUN ./subtask4.sh
RUN ./bashrcfile.sh


