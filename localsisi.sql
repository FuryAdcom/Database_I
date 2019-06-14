--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.11
-- Dumped by pg_dump version 9.6.11

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: contexto; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.contexto (
    id integer NOT NULL,
    contexto character varying NOT NULL,
    fk_pregunta integer
);


ALTER TABLE public.contexto OWNER TO postgres;

--
-- Name: contexto_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.contexto_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contexto_id_seq OWNER TO postgres;

--
-- Name: contexto_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.contexto_id_seq OWNED BY public.contexto.id;


--
-- Name: evento; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.evento (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    tipo character varying NOT NULL,
    fk_evento integer,
    fk_investigacion integer,
    fk_unidad_informacion integer,
    fk_pregunta integer
);


ALTER TABLE public.evento OWNER TO postgres;

--
-- Name: evento_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.evento_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.evento_id_seq OWNER TO postgres;

--
-- Name: evento_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.evento_id_seq OWNED BY public.evento.id;


--
-- Name: indicio; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.indicio (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    fk_sinergia integer
);


ALTER TABLE public.indicio OWNER TO postgres;

--
-- Name: indicio_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.indicio_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.indicio_id_seq OWNER TO postgres;

--
-- Name: indicio_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.indicio_id_seq OWNED BY public.indicio.id;


--
-- Name: investigacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.investigacion (
    id integer NOT NULL,
    titulo character varying NOT NULL,
    fk_usuario integer
);


ALTER TABLE public.investigacion OWNER TO postgres;

--
-- Name: investigacion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.investigacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.investigacion_id_seq OWNER TO postgres;

--
-- Name: investigacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.investigacion_id_seq OWNED BY public.investigacion.id;


--
-- Name: justificacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.justificacion (
    id integer NOT NULL,
    argumento character varying NOT NULL,
    tipo_argumento character varying NOT NULL,
    fk_investigacion integer,
    fk_evento integer,
    fk_contexto integer,
    fk_temporalidad integer,
    fk_unidad_estudio integer
);


ALTER TABLE public.justificacion OWNER TO postgres;

--
-- Name: COLUMN justificacion.fk_contexto; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.justificacion.fk_contexto IS '
';


--
-- Name: justificacion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.justificacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.justificacion_id_seq OWNER TO postgres;

--
-- Name: justificacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.justificacion_id_seq OWNED BY public.justificacion.id;


--
-- Name: objetivo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.objetivo (
    id integer NOT NULL,
    objetivo character varying NOT NULL,
    tipo character varying NOT NULL,
    fk_objetivo integer,
    fk_investigacion integer,
    fk_pregunta integer
);


ALTER TABLE public.objetivo OWNER TO postgres;

--
-- Name: objetivo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.objetivo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.objetivo_id_seq OWNER TO postgres;

--
-- Name: objetivo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.objetivo_id_seq OWNED BY public.objetivo.id;


--
-- Name: pregunta; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pregunta (
    id integer NOT NULL,
    pregunta character varying NOT NULL,
    tipo character varying NOT NULL,
    fk_pregunta integer,
    fk_investigacion integer
);


ALTER TABLE public.pregunta OWNER TO postgres;

--
-- Name: pregunta_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.pregunta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pregunta_id_seq OWNER TO postgres;

--
-- Name: pregunta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.pregunta_id_seq OWNED BY public.pregunta.id;


--
-- Name: sinergia; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sinergia (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    fk_evento integer
);


ALTER TABLE public.sinergia OWNER TO postgres;

--
-- Name: sinergia_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sinergia_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sinergia_id_seq OWNER TO postgres;

--
-- Name: sinergia_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sinergia_id_seq OWNED BY public.sinergia.id;


--
-- Name: temporalidad; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.temporalidad (
    id integer NOT NULL,
    fecha date NOT NULL,
    fk_pregunta integer
);


ALTER TABLE public.temporalidad OWNER TO postgres;

--
-- Name: temporalidad_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.temporalidad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.temporalidad_id_seq OWNER TO postgres;

--
-- Name: temporalidad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.temporalidad_id_seq OWNED BY public.temporalidad.id;


--
-- Name: unidad_estudio; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.unidad_estudio (
    id integer NOT NULL,
    unidad_estudio character varying NOT NULL,
    fk_pregunta integer
);


ALTER TABLE public.unidad_estudio OWNER TO postgres;

--
-- Name: unidad_estudio_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.unidad_estudio_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.unidad_estudio_id_seq OWNER TO postgres;

--
-- Name: unidad_estudio_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.unidad_estudio_id_seq OWNED BY public.unidad_estudio.id;


--
-- Name: unidad_informacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.unidad_informacion (
    id integer NOT NULL,
    categoria character varying NOT NULL,
    cita character varying NOT NULL,
    referencia character varying NOT NULL,
    nivel character varying NOT NULL,
    ubicacion_referencia character varying,
    fk_unidad_informacion integer,
    fk_investigacion integer,
    fk_evento integer,
    fk_justificacion integer
);


ALTER TABLE public.unidad_informacion OWNER TO postgres;

--
-- Name: unidad_informacion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.unidad_informacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.unidad_informacion_id_seq OWNER TO postgres;

--
-- Name: unidad_informacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.unidad_informacion_id_seq OWNED BY public.unidad_informacion.id;


--
-- Name: contexto id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contexto ALTER COLUMN id SET DEFAULT nextval('public.contexto_id_seq'::regclass);


--
-- Name: evento id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.evento ALTER COLUMN id SET DEFAULT nextval('public.evento_id_seq'::regclass);


--
-- Name: indicio id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.indicio ALTER COLUMN id SET DEFAULT nextval('public.indicio_id_seq'::regclass);


--
-- Name: investigacion id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.investigacion ALTER COLUMN id SET DEFAULT nextval('public.investigacion_id_seq'::regclass);


--
-- Name: justificacion id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.justificacion ALTER COLUMN id SET DEFAULT nextval('public.justificacion_id_seq'::regclass);


--
-- Name: objetivo id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.objetivo ALTER COLUMN id SET DEFAULT nextval('public.objetivo_id_seq'::regclass);


--
-- Name: pregunta id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pregunta ALTER COLUMN id SET DEFAULT nextval('public.pregunta_id_seq'::regclass);


--
-- Name: sinergia id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sinergia ALTER COLUMN id SET DEFAULT nextval('public.sinergia_id_seq'::regclass);


--
-- Name: temporalidad id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.temporalidad ALTER COLUMN id SET DEFAULT nextval('public.temporalidad_id_seq'::regclass);


--
-- Name: unidad_estudio id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad_estudio ALTER COLUMN id SET DEFAULT nextval('public.unidad_estudio_id_seq'::regclass);


--
-- Name: unidad_informacion id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad_informacion ALTER COLUMN id SET DEFAULT nextval('public.unidad_informacion_id_seq'::regclass);


--
-- Data for Name: contexto; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: contexto_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.contexto_id_seq', 1, false);


--
-- Data for Name: evento; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: evento_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.evento_id_seq', 1, false);


--
-- Data for Name: indicio; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: indicio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.indicio_id_seq', 1, false);


--
-- Data for Name: investigacion; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: investigacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.investigacion_id_seq', 1, false);


--
-- Data for Name: justificacion; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: justificacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.justificacion_id_seq', 1, false);


--
-- Data for Name: objetivo; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: objetivo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.objetivo_id_seq', 1, false);


--
-- Data for Name: pregunta; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: pregunta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.pregunta_id_seq', 1, false);


--
-- Data for Name: sinergia; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: sinergia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sinergia_id_seq', 1, false);


--
-- Data for Name: temporalidad; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: temporalidad_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.temporalidad_id_seq', 1, false);


--
-- Data for Name: unidad_estudio; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: unidad_estudio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.unidad_estudio_id_seq', 1, false);


--
-- Data for Name: unidad_informacion; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: unidad_informacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.unidad_informacion_id_seq', 1, false);


--
-- Name: contexto contexto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contexto
    ADD CONSTRAINT contexto_pkey PRIMARY KEY (id);


--
-- Name: evento evento_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT evento_pkey PRIMARY KEY (id);


--
-- Name: indicio indicio_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.indicio
    ADD CONSTRAINT indicio_pkey PRIMARY KEY (id);


--
-- Name: investigacion investigacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.investigacion
    ADD CONSTRAINT investigacion_pkey PRIMARY KEY (id);


--
-- Name: justificacion justificacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.justificacion
    ADD CONSTRAINT justificacion_pkey PRIMARY KEY (id);


--
-- Name: objetivo objetivo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.objetivo
    ADD CONSTRAINT objetivo_pkey PRIMARY KEY (id);


--
-- Name: pregunta pregunta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pregunta
    ADD CONSTRAINT pregunta_pkey PRIMARY KEY (id);


--
-- Name: sinergia sinergia_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sinergia
    ADD CONSTRAINT sinergia_pkey PRIMARY KEY (id);


--
-- Name: temporalidad temporalidad_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.temporalidad
    ADD CONSTRAINT temporalidad_pkey PRIMARY KEY (id);


--
-- Name: unidad_estudio unidad_estudio_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad_estudio
    ADD CONSTRAINT unidad_estudio_pkey PRIMARY KEY (id);


--
-- Name: unidad_informacion unidad_informacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT unidad_informacion_pkey PRIMARY KEY (id);


--
-- Name: fki_nexo_pregunta; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_nexo_pregunta ON public.evento USING btree (fk_pregunta);


--
-- Name: fki_recursiva; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_recursiva ON public.pregunta USING btree (fk_pregunta);


--
-- Name: fki_recursiva_evento; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_recursiva_evento ON public.evento USING btree (fk_evento);


--
-- Name: fki_recursiva_ui; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_recursiva_ui ON public.unidad_informacion USING btree (fk_unidad_informacion);


--
-- Name: fki_relacion_evento; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_relacion_evento ON public.unidad_informacion USING btree (fk_evento);


--
-- Name: fki_relacion_investigacion; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_relacion_investigacion ON public.unidad_informacion USING btree (fk_investigacion);


--
-- Name: fki_relacion_justificacion; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_relacion_justificacion ON public.unidad_informacion USING btree (fk_justificacion);


--
-- Name: fki_relacion_oregunta; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_relacion_oregunta ON public.temporalidad USING btree (fk_pregunta);


--
-- Name: fki_relacion_pregunta; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_relacion_pregunta ON public.contexto USING btree (fk_pregunta);


--
-- Name: fki_relacion_recursiva; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_relacion_recursiva ON public.objetivo USING btree (fk_objetivo);


--
-- Name: fki_relacion_temporalidad; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_relacion_temporalidad ON public.justificacion USING btree (fk_temporalidad);


--
-- Name: fki_relacion_unidad_informacion; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_relacion_unidad_informacion ON public.evento USING btree (fk_unidad_informacion);


--
-- Name: evento nexo_pregunta; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT nexo_pregunta FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- Name: pregunta recursiva; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pregunta
    ADD CONSTRAINT recursiva FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- Name: evento recursiva_evento; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT recursiva_evento FOREIGN KEY (fk_evento) REFERENCES public.evento(id);


--
-- Name: unidad_informacion recursiva_ui; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT recursiva_ui FOREIGN KEY (fk_unidad_informacion) REFERENCES public.unidad_informacion(id);


--
-- Name: pregunta relacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pregunta
    ADD CONSTRAINT relacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- Name: unidad_informacion relacion_evento; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT relacion_evento FOREIGN KEY (fk_evento) REFERENCES public.evento(id);


--
-- Name: justificacion relacion_evento; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.justificacion
    ADD CONSTRAINT relacion_evento FOREIGN KEY (fk_evento) REFERENCES public.evento(id);


--
-- Name: sinergia relacion_evento; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sinergia
    ADD CONSTRAINT relacion_evento FOREIGN KEY (fk_evento) REFERENCES public.contexto(id);


--
-- Name: objetivo relacion_investigacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.objetivo
    ADD CONSTRAINT relacion_investigacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- Name: evento relacion_investigacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT relacion_investigacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- Name: unidad_informacion relacion_investigacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT relacion_investigacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- Name: justificacion relacion_investigacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.justificacion
    ADD CONSTRAINT relacion_investigacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- Name: unidad_informacion relacion_justificacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT relacion_justificacion FOREIGN KEY (fk_justificacion) REFERENCES public.justificacion(id);


--
-- Name: temporalidad relacion_oregunta; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.temporalidad
    ADD CONSTRAINT relacion_oregunta FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- Name: objetivo relacion_pregunta; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.objetivo
    ADD CONSTRAINT relacion_pregunta FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- Name: contexto relacion_pregunta; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contexto
    ADD CONSTRAINT relacion_pregunta FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- Name: objetivo relacion_recursiva; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.objetivo
    ADD CONSTRAINT relacion_recursiva FOREIGN KEY (fk_objetivo) REFERENCES public.objetivo(id);


--
-- Name: indicio relacion_sinergia; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.indicio
    ADD CONSTRAINT relacion_sinergia FOREIGN KEY (fk_sinergia) REFERENCES public.sinergia(id);


--
-- Name: justificacion relacion_temporalidad; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.justificacion
    ADD CONSTRAINT relacion_temporalidad FOREIGN KEY (fk_temporalidad) REFERENCES public.temporalidad(id);


--
-- Name: evento relacion_unidad_informacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT relacion_unidad_informacion FOREIGN KEY (fk_unidad_informacion) REFERENCES public.unidad_informacion(id);


--
-- Name: unidad_estudio unidad_estudio_fk_pregunta_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad_estudio
    ADD CONSTRAINT unidad_estudio_fk_pregunta_fkey FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- PostgreSQL database dump complete
--

